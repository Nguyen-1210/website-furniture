<link rel="stylesheet" href="./css/components/list.css">
<div class="dash-content">
    <div class="title">
        <div style="display: flex;align-items: center;">

            <i class="fa-solid fa-rectangle-list"></i>
            <h1 class="text">Danh sách</h1>
        </div>
        <a href="index.php?act=add_types" style="display: flex;align-items: center;">
            <i class="fa-sharp fa-solid fa-folder-plus"></i>
            <h1 class="text">Thêm danh mục</h1>

        </a>
    </div>
    <table>
        <thead>
            <tr>
               
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>ẢNH</th>
                <th>CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=edit_types&id=" . $id;
                $xoadm = "index.php?act=delete_types&id=" . $id;
                $img_path = "../upload/" . $img;
                if (is_file($img_path)) {
                    $img = "<img src='" . $img_path . "' height='80'>";
                } else {
                    $img = "NO Photo";
                }
                $show = '
                                <tr>
<<<<<<< HEAD
                                <td><strong><input type="checkbox" name="check" id=""></strong></td>
=======
                               
>>>>>>> dev/nguyen
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $img . '</td>
                                <td> <a href="' . $suadm . '"> <i class="fa-solid fa-pen-to-square btn-list"></i></a>
                                 ';
                if (can_delete($id)) {
                    $show .= '<a href="' . $xoadm . '"><i class="fa-sharp fa-solid fa-trash  btn-list"></i></a> ';
                }
                $show .= '  </td> </tr>';
                echo $show;
            }
            ?>
        </tbody>
    </table>
</div>