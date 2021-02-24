<?php 

class User_model extends CI_model{

    function create($formArray){

        $this->db->insert('users', $formArray); // insert into users(name, email) values (?, ?);
    }

    function all(){

        return $users = $this->db->get('users')->result_array(); // select * from users

    }

    function getUser($user_id){

        $this->db->where('user_id', $user_id);
        return $user = $this->db->get('users')->row_array(); // select * from users wehre user_id = ?
    }

    function updateUser($user_id, $formArray){

        $this->db->where('user_id', $user_id);
        $this->db->update('users', $formArray); // Update users set user_name = ?, user_email = ? where user_id = ?
    }

    function deleteUser($user_id){

        $this->db->where('user_id', $user_id);
        $this->db->delete('users'); // delete from users where user_id = ?
    }
}

?>