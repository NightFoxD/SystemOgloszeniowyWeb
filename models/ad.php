<?php
    class Ad extends Model{
        public function Index(){
            // $this->query('SELECT * FROM ads ORDER BY create_date DESC');
            // $rows = $this->resultSet();
            // return $rows;
        }
        public function add(){
            // Sanitize POST
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($post['submit']){
                if($post['title'] == '' || $post['content'] == ''){
                Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                return;
                }
                $this->query('INSERT INTO ads (title, content, user_id) VALUES(:title, :content, :user_id)');
                $this->bind(':title', $post['title']);
                $this->bind(':content', $post['content']);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                if($this->lastInsertId()){
                    return true;
                }
            }
            return false;
        }
        public function remove($id) {
            if(intval($id) > 0) {
                $this->query('SELECT * FROM ads WHERE id =:id AND user_id = :user_id');
                $this->bind(':id', $id);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $row = $this->single();
                if($row) {
                    $this->query('DELETE FROM ads WHERE id = :id;');
                    $this->bind(':id', $id);
                    $this->execute();
                return true;
                }
            }
            return false;
        }
        public function change($id) {
            // Sanitize POST
            $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            if($post['submit']) {
                if($post['title'] == '' || $post['content'] =='') {
                    Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
                    return false;
                }
                $this->query('UPDATE ads SET title = :title, content= :content WHERE id = :id AND user_id = :user_id;');
                $this->bind(':title', $post['title']);
                $this->bind(':content', $post['content']);
                $this->bind(':id', $id);
                $this->bind(':user_id', $_SESSION['user_data']
                ['id']);
                $this->execute();
                if($this->rowCount() > 0){
                    return true;
                }
            }
            return false;
        }
        public function get($id) {
            if(intval($id) > 0) {
                $this->query('SELECT * FROM ads WHERE id =:id;');
                $this->bind(':id', $id);
                return $this->single();
            }
            return null;
        }
    }
?>