<?php
session_start();

if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page 2</title>
</head>
<body class="bg" id="pic1">
<div class="nav">
        <a href="handler.php">Go back-></a>
        <a href="page1.php">PAGE1</a>
        <a href="page2.php">PAGE2</a>
        <a href="destroy.php">Logout</a>
    </div>
    <div class="box">
        <h1>Welcome to Page 1
        <?php  
        echo $_SESSION["user"];
        
        ?>
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex, magnam delectus eos obcaecati numquam maiores fugiat esse placeat iste ducimus sint, exercitationem voluptatum tempore? Quo dicta inventore, pariatur expedita sapiente obcaecati quaerat necessitatibus assumenda voluptates? Maiores eligendi culpa omnis laboriosam aperiam, laudantium unde a quod. Natus minima excepturi atque, fuga recusandae architecto magnam eos ratione voluptatem nemo alias facilis! Accusantium similique quaerat sint, quas sunt obcaecati explicabo assumenda illum ratione aut id ullam omnis suscipit architecto repudiandae officia dolore aliquid nulla praesentium doloribus itaque deleniti. Maxime laudantium dicta exercitationem, dolorum ullam aliquam consequatur inventore sunt at nisi mollitia nostrum libero itaque fugiat ab quisquam similique eum iste ducimus distinctio expedita atque! Et suscipit corrupti repellat sunt, molestias assumenda? Ipsam eum sit veniam, est ipsa nobis amet, velit vel rem aliquam quidem veritatis praesentium. Aut delectus omnis itaque adipisci, libero molestias animi obcaecati, dignissimos deserunt temporibus impedit amet vero architecto, perferendis quo ratione consectetur eligendi doloribus iusto ad eveniet voluptatum laudantium autem alias. Porro obcaecati voluptates fugit inventore quae possimus tempora! Dolore suscipit doloremque ipsum eos aperiam, velit consectetur! Aliquam sunt ipsa placeat dolorem nesciunt blanditiis, excepturi tempora cumque fuga. Labore vitae corporis sunt, minus, porro cumque iure ipsum deserunt consectetur voluptates eum officia, perspiciatis rem voluptatum rerum a soluta possimus itaque provident distinctio. Ipsam laudantium neque consequatur repudiandae! Ipsa dolores soluta, enim necessitatibus vero molestias! Ducimus sapiente ex ipsa nesciunt temporibus, aliquid deleniti commodi, amet dolore animi ratione est fuga provident voluptatum tenetur rerum recusandae. Hic voluptate fugiat iste expedita voluptates reiciendis maiores ex accusamus aspernatur ratione corporis recusandae earum dolore, quos, porro sint, velit facere consectetur. Quia, nisi iure quasi illo harum consectetur et doloremque eligendi esse sint molestias eaque debitis cupiditate accusantium maiores possimus ipsam sapiente ex exercitationem magnam itaque quibusdam ipsum nobis earum. Laborum, dolores. Repellat assumenda placeat reiciendis aperiam odio, aliquam laborum accusamus, mollitia unde dolores enim officiis, pariatur ipsa aut suscipit et eos laudantium adipisci eveniet minima architecto! Illum dolores totam veritatis quaerat deserunt accusamus voluptates laborum mollitia. Rerum asperiores mollitia nisi explicabo. Dolores corrupti optio, sit tempora quae aliquam voluptatibus, praesentium pariatur impedit, ullam nesciunt culpa dolor sed quisquam officiis mollitia quo sunt laborum nulla. Consequuntur tempore dolore consectetur tempora ea maxime impedit deserunt, optio molestias? Amet quasi sapiente nobis eos veniam repudiandae? Totam error quibusdam tempora beatae ducimus esse velit officia, ratione fugit quas eos dolorum quod placeat nostrum nam eligendi ipsum delectus voluptas. Exercitationem delectus sed veritatis! Consectetur ratione cum reiciendis nobis ipsam sapiente nesciunt unde ut, earum nostrum voluptatibus esse totam dolorum cupiditate laborum quod aliquam, dolores, beatae sequi aliquid blanditiis ad rem. Obcaecati veritatis ut voluptas sed expedita laboriosam, quod fugiat, ullam excepturi dolorum ab autem illum quae nam recusandae reprehenderit blanditiis similique harum aut corrupti, at vero ad! Aliquid illum harum minima inventore quod ea qui consequatur, esse ad saepe ratione nam aut est veritatis cum quae iusto amet debitis minus dolorum consectetur! Nesciunt fugiat deleniti, dolores nemo, placeat similique veniam voluptas illo, dolore sed est. Assumenda laboriosam alias minus ad consectetur quam quidem iusto tempore, magnam esse provident aperiam libero eaque recusandae obcaecati odit culpa, voluptatibus molestiae maxime distinctio dolores dicta similique. Placeat, accusantium. Quos sit nobis ratione incidunt debitis minus labore veniam accusamus dolorem rem aliquid iure molestias quae, excepturi suscipit iste nihil voluptates unde natus. Modi distinctio similique corporis hic architecto cupiditate blanditiis animi est eum in ratione eveniet facere, tempora, ut inventore sunt accusantium cumque quisquam assumenda dignissimos, sit excepturi. Nemo error blanditiis laborum necessitatibus quidem, modi voluptatem similique voluptatum aliquid, assumenda earum ab? Beatae, distinctio a id atque eius sapiente obcaecati labore porro, suscipit ducimus fuga dicta culpa officia voluptates sit. Repellat voluptatem veniam ullam nemo. Veniam ratione nihil accusamus voluptates atque, dolorum ullam officia. Obcaecati incidunt quas nostrum asperiores nihil, odio, impedit accusantium fugit fugiat doloribus ratione quos dicta. Dolore nostrum asperiores, quaerat fuga aperiam quas quos ad suscipit. Odit, deleniti. Obcaecati suscipit ab quisquam deserunt nobis consequuntur, dolorem, dolores, at beatae facilis possimus necessitatibus? Rem qui at cumque in excepturi, quia sequi illo totam veniam consequatur voluptas, odit eius laudantium nostrum sint! Fuga, suscipit deserunt nobis nostrum perspiciatis ipsa cum quaerat iste laborum omnis maxime dolores ullam quos dolor officia aspernatur, at enim nesciunt expedita voluptatem beatae commodi? Cupiditate iure repellat autem suscipit aliquid voluptatem praesentium. Dolore vitae voluptatem eveniet natus ipsum voluptas! Quaerat at tempore consectetur vel alias autem distinctio error totam deserunt ut vero iste magni quis ratione excepturi dolorem veniam ea asperiores accusamus quod explicabo, voluptates odio labore. Harum autem beatae ratione et atque minus iusto voluptate ipsum incidunt esse dignissimos soluta temporibus cum perspiciatis iure, sit pariatur itaque minima. Autem quas repudiandae nostrum reprehenderit maxime iste optio quod similique a beatae ad mollitia aliquid architecto ducimus corporis fuga dicta impedit modi, rem reiciendis facere debitis nihil magnam. Aliquid necessitatibus, architecto veritatis culpa laboriosam molestiae. Voluptates recusandae itaque similique quod tempore quis suscipit minus nisi ipsa impedit. Iure a officiis dignissimos ad sed fugit rerum provident dolorem et laborum perspiciatis, asperiores sapiente earum corporis corrupti nemo totam veritatis recusandae amet quidem, explicabo ipsum nisi nostrum. Amet a reprehenderit provident enim ducimus suscipit ut nisi quisquam impedit. Deleniti ab consectetur error repudiandae! Magni, non doloremque, amet optio accusamus molestiae quos voluptatem ad quae dignissimos illum labore omnis harum rerum corporis magnam officia id dolore est ut obcaecati fugit. Sapiente non, quibusdam cumque corrupti in, explicabo aut inventore magnam vitae, nam est voluptate nemo unde sint! Odio quidem culpa pariatur laudantium odit maxime perferendis? Ad rem, ab assumenda fuga est culpa laborum aperiam, unde fugiat iusto saepe voluptatibus vitae fugit quasi, beatae molestias sequi aliquam placeat sapiente soluta perspiciatis eos! Maiores aut itaque recusandae, unde, sit doloribus laudantium qui consequuntur earum minus similique corrupti a omnis, praesentium dolorum quasi deserunt culpa? Voluptates velit, molestiae minus dolor reprehenderit aliquam, asperiores unde fuga exercitationem accusamus incidunt consequuntur autem magni ullam praesentium quaerat nostrum expedita vero animi aut repudiandae facere corporis distinctio! Architecto cumque dolores facere quam, quae expedita delectus asperiores explicabo qui accusantium.
</p>
    </div>
    
</body>
</html>