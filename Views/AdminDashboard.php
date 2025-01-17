<?php 
    include ("../Controllers/UserController.php");
    $usercontroll = new UserController();
   

    // $id = 4;
    // $usercontroll-> Delete($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class = "font-[outfit]">

    <section>
        
    </section>

    <section class = " backdrop-blur-sm w-full absolute flex justify-center items-center h-screen hidden " id = "formPopup">
       <form class="w-1/2 h-auto bg-gray-500 p-5 rounded-xl" action = "AdminDashboard.php" method = "post">
        <div>
           <div class="mb-5">
        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
        <input type="text" id="nom" name = "nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
        <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
        <input type="text" id="prenom" name = "prenom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" id="email" name = "email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
        <input type="text" id="phone" name = "phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="mb-5">
        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
        <div class="w-full flex justify-center">
            <select name="role" id="role" class="w-[90%] rounded">
            <option value="Admin">Admin</option>
            <option value="Etudiant">Etudiant</option>
            <option value="Enseignant">Enseignant</option>
            </select>
        </div> 
        </div>
        
        
        </div>
        <button type="submit" name = "ajouterFormBtn" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "ajouterBtnForm">Ajouter</button>
        <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" id = "annulerBtnForm">Annuler</button>
        <!-- <button type="Ajoute" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ajoute</button> -->
        </form>
    </section>
        <?php 
            $ajouterFormBtn = $_POST['ajouterFormBtn'];           

            if(isset($ajouterFormBtn))
            {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $role = $_POST['role'];

                if($role == 'Admin'){
                    $role = 1;
                }
    
                if($role == 'Etudiant'){
                    $role = 2;
                }
    
                if($role == 'Enseignant'){
                    $role = 3;
                } 

                $names = ["nom" => "'$nom'", "prenom" => "'$prenom'", "email" => "'$email'", "phone" => "'$phone'" , "role_id" => "'$role'"];
                $usercontroll->creeusers($names);
              

            unset($_POST);
             
            }
        ?>
    <section class = "border-black border-solid border-2 bg-blue-500 w-full flex">
        <div class = "border-black border-solid border-2 bg-blue-500 w-1/3">
            <h1>Cours</h1>
        </div>
        <div class = "border-black border-solid border-2 bg-cyan-500 w-full px-6 py-2">
           
            <div class="flex justify-between pr-4">
               <h1 class = "text-center py-1">Utilisateurs</h1>
               <div>
               <button type="button" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-2 py-2 text-center mb-2" id = "ajouterUtilisateur">+ Ajouter</button>
               </div>
            </div>

            <table class="w-full text-sm text-left border border-gray-200">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Id</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Nom</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Prenom</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Email</th>
                        <th class="px-1 py-1 border-black border-solid border-[1px]">Phone</th>
                   </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'id'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'nom'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'prenom'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'email'; $usercontroll->Users($finder);?></td>
                        <td class="px-1 py-1 border-black border-solid border-[1px]"> <?php $finder = 'phone'; $usercontroll->Users($finder);?></td>
                    </tr>
                </tbody>
           
            </table>


            
        </div>
    </section>
    <script src = "../Assets/src/admin.js"></script>
</body>
</html>