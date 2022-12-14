<style>
    body {
        overflow: hidden;
    }
</style>

    <link rel="stylesheet" href="./css/components/add.css">
<div class="dash-content">
            <div class="title"> 
                <div style="display: flex;align-items: center;">
                <i class="fa-sharp fa-solid fa-folder-plus"></i>
                <h1 class="text">Thêm hàng hóa</h1>
                </div>
                <a href="index.php?act=list_types" style="display: flex;align-items: center;">

                    <i class="fa-solid fa-rectangle-list"></i>
                    <h1 class="text">Danh sách</h1>
                </a>
            </div>
            
            <div class="import-box">
                <div class="form-import" style="padding-top: 0;" >
                    <form method="POST" enctype="multipart/form-data">
                        <!-- input nhập sản phẩm -->
                        <div class="import-list">
                            <input type="text" required="required" id="maloai" name="maloai" disabled >
                            <span class="import-text"> Mã danh mục</span>
                            <i></i>
                        </div>
                        <div class="import-list">
                    <label for="files" class="import-text btn-list">Lấy ảnh</label>
                    <input id="files" name="img" type="file">
                </div>
                        <div class="import-list">
                            <input type="text" required="required" name="tenloai" id="tenloai">
                            <span class="import-text"> Tên danh mục</span>
                            <i></i>
                        </div>

                        <!-- button thêm danh mục, danh sách -->
                        <div class="import-btn">
                        <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ?>">
                            <input type="submit" name="themmoi" class="btn-list" value="Thêm mới">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>