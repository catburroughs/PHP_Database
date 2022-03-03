<?php



class Member {
//properties
    public $firstname;
    public $lastname;
    private $email;
    public $school;

//methods
    public function __construct(string $firstname, string $lastname, string $email, array $school) {
    
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->school = $school;
        
    }

    public function confirmation(): string{
    
        return "New Member Added, {$this->firstname} {$this ->lastname} {$this ->school}";
    }
}



$members = [
    new Member("Alice", "Avery", "avery@aol.com", "University of Aberdeen"),
    new Member("BOB", "Bobson", "bobson@aol.com", "University of Boston"),
    new Member("Charlie", "Charles", "charles@aol.com", "University of Cheltenham"),
];


?>