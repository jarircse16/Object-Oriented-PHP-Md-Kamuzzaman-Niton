<?php
    
    class BlogMember{
        
        private $first_name;
        private $last_name;
        private $email;
        
        public function __construct ($first_name = "" , $last_name = "" ,$email = "") {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
        }
        
        public function get_information(){
            return array(
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email);
        }
        
        public function set_information ($first_name ,$last_name , $email){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
        }
    }
    $jarir = new BlogMember();
    $jarir->set_information('Jarir','Ahmed','jarircse16@gmail.com');
    
    echo '<h1>Before Serialization</h1>';
    var_dump($jarir);
    
    //serialize 
    echo '<h1>After Serialization</h1>';
    $jarir_serialized = serialize($jarir);
    var_dump($jarir_serialized);
    
    //writing to file
    $file = fopen('jarir.info','wb');
    fwrite($file , $jarir_serialized);
    
    //unserialize
    echo '<h1>After Unserialization</h1>';
    $jarir_info  = file_get_contents('jarir.info');
    $jarir_deserialized = unserialize($jarir_info);
    var_dump($jarir_deserialized);
    
    echo '<h1>Calling method from unserialized object</h1>';
    $jarir_deserialized->get_information();
    var_dump($jarir_deserialized->get_information());
    
    
    
    ?>