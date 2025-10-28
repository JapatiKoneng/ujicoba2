NOTE:
Cara menambahkan user ke Database:

1. masukan code dibawah di bawah
   
php artisan tinker

2. lalu copy paste code di bawah,
   
Use App\Models\Users;
User::create([
'name'=>'Test',
'email'=>'test@example.com',
'password'=>bcrypt('secret123'),
)]);
