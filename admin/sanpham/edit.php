<link rel="stylesheet" href="./css/components/add.css">

<div class="dash-content">
    <div class="title">
        <div style="display: flex;align-items: center;">
            <i class="fa-sharp fa-solid fa-folder-plus"></i>
            <h1 class="text">Sửa hàng hóa</h1>
        </div>
        <a href="index.php?act=list_products" style="display: flex;align-items: center;">

            <i class="fa-solid fa-rectangle-list"></i>
            <h1 class="text">Danh sách</h1>
        </a>
    </div>

    <div class="import-box">
        <div class="form-import">
            <form action="#" method="POST">
                <!-- input nhập sản phẩm -->
                <div class="import-list">
                    <input type="text" required="required" id="madm" name="madm">
                    <span class="import-text"> Mã danh mục</span>
                    <i></i>
                </div>

                <div class="import-list">
                    <input type="text" required="required" name="tenhh" id="tenhh">
                    <span class="import-text"> Tên hàng hóa</span>
                    <i></i>
                </div>
                <div class="import-list">
                    <input type="text" required="required" name="giahh" id="giahh">
                    <span class="import-text"> Giá</span>
                    <i></i>
                </div>
                <div class="import-list">
                    <label for="files" class="import-text btn-list">Lấy ảnh</label>
                    <input id="files" name="hinh" style="visibility:hidden;" type="file">
                    <!-- <input type="file" name="hinh" required name="anhhh" id="anhhh" width="30%" data-input="false" data-classIcon="icon-plus" data-buttonText="Your label here.">
                    <span class="import-text"> Ảnh</span> -->
                    <!-- <i></i> -->
                </div>
                <div class="import-list">

                    <fieldset>
                        <legend style="
                margin-left: 10px;
                                ">Mô tả</legend>
                        <textarea name="mota" cols="132" rows="5" required="required" name="motahh" id="motahh"></textarea>
                    </fieldset>
                    <!-- <i></i> -->
                </div>
                <div class="import-list">
                    <input type="text" required="required" name="giamgiahh" id="giamgiahh">
                    <span class="import-text"> Giảm giá</span>
                    <i></i>
                </div>

                <!-- button thêm danh mục, danh sách -->
                <div class="import-btn">
                    <input type="submit" name="capnhat" class="btn-list" value="Cập nhật">
                    <!-- <a href="danhsach.html"><input type="button" class="btn-list" value="Danh sách"></a> -->
                </div>
            </form>
        </div>
    </div>
</div>