<?php
//profile model
class ProfileModel extends database
{
    public function updateProfile($data, $cond)
    {
        $values = null;
        foreach ($data as $key => $value) {
            $values .= $key . '="' . $value . '",';
        }
        $values = rtrim($values, ',');
        $sql = "update customer set $values where $cond";
        return $this->update($sql);
    }

    public function userId()
    {
        if (isset($_COOKIE['cuser'])) {
            $cookie = $_COOKIE['cuser'];
            $sql = "select * from customer where cookie='$cookie' and status=1";
            $query = $this->select($sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows) {
                $row =  $query->fetch_assoc();
                return $row['id'];
            } else {
                return false;
            }
        }
    }

    public function userData()
    {
        $id = $this->userId();
        $sql = "SELECT * FROM customer WHERE id=$id";
        $query = $this->select($sql);
        $row = $query->fetch_assoc();
        return $row;
    }
}