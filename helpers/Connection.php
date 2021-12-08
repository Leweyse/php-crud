<?php

class Connection
{
    private mysqli $conn;

    private array $arrayData;

    public function __construct($hostname, $username, $password, $database)
    {
        // Connection with DB
        $this->conn = new mysqli($hostname, $username, $password, $database);
    }

    // SetData method
    public function selectData(int $id, string $table, array $column, $class)
    {
        $methods = get_class_methods($class);

        $string = '';

        foreach($column as $key => $elem) {
            if ($key === count($column) - 1) {
                $string .= $elem;
            } else {
                $string .= $elem . ",";
            }
        }

        $columns = $this->conn->query("SELECT $string FROM $table WHERE id = $id");
        $row = $columns->fetch_assoc();
        var_dump($row);
        $arrTemp = [];

        foreach ($methods as $key => $value) {
            if ($key < count($column)) {
                $class -> $value($row[(string)$column[$key]]);
            } else {
                $arrTemp[$column[$key % (count($methods) / 2)]] = $class -> $value();
                if (count($arrTemp) === count($methods) / 2) {
                    $this->arrayData[] = $arrTemp;
                    return $arrTemp;
                }
            }
        }
    }

    public function insertData(array $values, string $table, array $columns, $class)
    {
        $methods = get_class_methods($class);

        $columnString = '';
        $valueString = '';

        foreach($columns as $key => $elem) {
            if ($key === count($columns) - 1) {
                $columnString .= $elem;
            } else {
                $columnString .= $elem . ",";
            }
        }

        foreach($values as $key => $elem) {
            if ($key === count($values) - 1) {
                if (is_numeric($elem)) {
                    $valueString .= $elem;
                }   else {
                    $valueString .= '"' . $elem . '"';
                }
            } else {
                if (is_numeric($elem)) {
                    $valueString .= $elem . ",";
                }   else {
                    $valueString .= '"' . $elem . '"' . ",";
                }
            }
        }

        $data = $this->conn->query("INSERT INTO $table($columnString) VALUES($valueString)");

        $info = [];

        foreach ($columns as $key => $value) {
            $info[$value] = $values[$key];
        }

        $arrTemp = [];

        foreach ($methods as $key => $value) {
            if ($key < count($columns)) {
                $class -> $value($info[(string)$columns[$key]]);
            } else {
                $arrTemp[$columns[$key % (count($methods) / 2)]] = $class -> $value();
                if (count($arrTemp) === count($methods) / 2) {
                    $this->arrayData[] = $arrTemp;
                    return $arrTemp;
                }
            }
        }
    }

    public function updateData(int $id, array $values, string $table, array $columns, $class)
    {
        $methods = get_class_methods($class);

        $string = '';

        foreach($columns as $key => $elem) {
            if ($key === count($columns) - 1) {
                $string .= $elem."=".$values[$key];
            } else {
                $string .= $elem."=".$values[$key] . ",";
            }
        }

        $data = $this->conn->query("UPDATE $table SET $string WHERE id=$id");

        $info = [];

        foreach ($columns as $key => $value) {
            $info[$value] = $values[$key];
        }

        $arrTemp = [];

        foreach ($methods as $key => $value) {
            if ($key < count($columns)) {
                $class -> $value($info[(string)$columns[$key]]);
            } else {
                $arrTemp[$columns[$key % (count($methods) / 2)]] = $class -> $value();
                if (count($arrTemp) === count($methods) / 2) {
                    $this->arrayData[] = $arrTemp;
                    return $arrTemp;
                }
            }
        }
    }

    public function deleteData(int $id, string $table, array $column, $class)
    {
        $methods = get_class_methods($class);

        $string = '';

        foreach($column as $key => $elem) {
            if ($key === count($column) - 1) {
                $string .= $elem;
            } else {
                $string .= $elem . ",";
            }
        }

        $data = $this->conn->query("DELETE FROM $table WHERE id = $id");
    }

    public function getData(): array
    {
        return $this->arrayData;
    }

    public function clearData(): void
    {
        $this->arrayData = [];
    }

    public function getColLength ($table): string
    {
        $result = $this->conn->query("SELECT COUNT(*) FROM $table ");
        $colLength = $result->fetch_assoc();
        return $colLength["COUNT(*)"];
    }

    // public function testConnection (): void
    // {
    //     if ($this->conn->connect_error) {
    //         die("Connection failed: " . $this->conn->connect_error);
    //     }
    // }
}