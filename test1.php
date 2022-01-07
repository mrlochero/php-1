<html>
 <head>
     <meta charset="UTF-8">
     <style type="text/css">
         * {
             margin:0;
             padding:0;
         }
         .content {
             width:500px;
             padding:10px;
             border: 2px solid #ddd;
             height: auto;
             margin:10px auto;
         }
     </style>
 </head>
 <body>
    <div class="content">
        <?php
           $group = [0 => "Admin", 1 => "Admin1",2 => "Admin2",3 => "Admin3",4 => "Admin4"];
           $thanhpho = [74 => "Quảng Trị", 75 => "Huế",73 => " Quảng Bình"];
           function createSelector($name, $attribute,$array,$keySelector)
           {

               $xhtml = "";
               if (!empty($array)) {
                   $xhtml .= '<select name="'.$name.'" id="'.$name.'" style="'.$attribute.'">';
                   foreach ($array as $key => $value) {
                       if ($key == $keySelector) {
                           $xhtml .= '<option value="' . $key . '" selected>' . $value . '</option>';
                       } else {
                           $xhtml .= '<option value="' . $key . '">' . $value . '</option>';
                       }
                   }
                   $xhtml .= '</select>';
               }
              return $xhtml;
           }

           $groupSelector = createSelector("group","width:200px",$group,2);
            $citySelector = createSelector("city","width:400px",$thanhpho,74);
           echo $groupSelector;
           echo $citySelector;
           ?>


    </div>
 </body>
</html>