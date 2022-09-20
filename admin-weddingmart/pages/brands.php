<div class="wrapper mt-20 mb-20">

    <section class="blocks">

        <h2>Brand List</h2>

        <div class="row top_btn">
            <div class="btn_block">
                <a href="brands_add" class="btn"> <i class="fas fa-plus"></i> Add Brand</a>
            </div>
        </div>

        <?php

        echo "<table class='table-1'>

<tr><th>id</th>";

        echo "<th>Brands Seq</th>

<th>Brands Name</th>

<th>Brands Image</th>

<!--<th>Edit</th>-->
<th>View</th>

<!--<th>Delete</th>-->

</tr>";

        $crud = new Crud;
        $sql = "SELECT id,brand_name,brand_img,brand_seq from brands";

        $result = $crud->getData($sql);

        if (!empty($result)) {

            foreach ($result as $res) {

                $imgurl = IMAGE_SITE_URL.'/brand_'.$res['id'].'/'.$res['brand_img'];





                echo "<tr>

<td>{$res['id']}</td>

<td>{$res['brand_seq']}</td>

<td>{$res['brand_name']}</td>
<td><img src='{$imgurl}' style= 'max-height: 70px;'  alt''/></td>

<!--<td><a href='brands_edit?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>edit</a></td>-->
<td><a href='brands_view?id={$res['id']}' class='btn'><i class='fas fa-edit'></i>View</a></td>



<td ><a href='javascript:void(0)' data-id='{$res['id']}' data-name='brands' class='dlt btn'><i class='fas fa-edit'></i>delete</a></td>

    

</tr>";
            }
        }

        echo "</table>";



        ?>

    </section>

</div>