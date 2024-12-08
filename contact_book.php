<!-- 版本1 -->
<?php
$contacts = [
  "John Doe" => ["email" => "john@example.com", "phone" => "123-456-7890"],
  "Jane Doe" => ["email" => "jane@example.com", "phone" => "098-765-4321"]
];
function displayContacts($contacts)
{
  foreach ($contacts as $name => $info) {
    echo "Name:$name,Email:" . $info['email'] . ",phone:" . $info['phone'] . "\n";
  }
};
$contacts["Alex Smith"] = ["email" => "alex@example.com", "phone" => "555-555-5555"];
unset($contacts["John Doe"]);
displayContacts($contacts);
?>