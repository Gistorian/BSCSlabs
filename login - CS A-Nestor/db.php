<?php

$dbHost ='aws-0-ap-northeast-1.pooler.supabase.com';
$dbUser ='postgres.thvlmmiyacwhcddfpzuh';
$dbPassword ='RevivalGod101MAX';

$conn = pg_connect("host=$dbHost port=5432 dbname=postgres user=$dbUser 
                    password=$dbPassword sslmode=require");

if (!$conn){
    exit('database connection failed');
}

?>
