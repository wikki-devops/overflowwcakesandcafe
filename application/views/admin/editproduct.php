<div class="container"><?php echo form_open_multipart('admin/editproduct/' . $product['id']); ?>
    <div class="modal-body">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <div class="modal-inside">
            <div class="container" style="padding: 10px; margin: 0px">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="varieties" value="<?php echo $product['varieties']; ?>"
                    placeholder="" />
            </div>
        </div>
        <div class="modal-inside">
            <div class="container" style="padding: 10px; margin: 0px">
                <label class="form-label">Product Image</label>
                <p>
                    <img src="<?php echo base_url(); ?>assets/admin/products/<?php echo $product['image']; ?>"
                        width="200px" />
                </p>
            </div>
        </div>
        <div class="modal-inside">
            <div class="container" style="padding: 10px; margin: 0px">
                <label class="form-label">New Image <span style="color: red">(image size should be 500x500 square shape)</span></label>
                <input class="form-control" type="file" name="userfile" id="imgInp">
            </div>
        </div>

        <div class="modal-inside">
            <div class="container" style="padding: 10px; margin: 0px">
                <label class="form-label">Preview New Image</label>
                <p><img id="blah" src="<?php echo base_url(); ?>assets/images/dummy.jpg" alt="Image Preview"
                        style="max-width: 100%; max-height: 200px;"></p>
            </div>
        </div>

        <div class="modal-inside">
            <div class="container" style="padding: 10px; margin: 0px">
                <label class="form-label">Product Price 500gm Cake / Single Product</label>
                <div class="input-group mb-3  input-info">
                    <span class="input-group-text border-0">₹</span>
                    <input type="text" class="form-control" value="<?php echo $product['price1']; ?>" name="price1">
                    <span class="input-group-text border-0">.00</span>
                </div>
            </div>
        </div>

        <div class="modal-inside">
            <div class="container" style="padding: 10px; margin: 0px">
                <label for="exampleInputText" class="form-label">Product Price 1kg Cake</label>
                <div class="input-group mb-3  input-info">
                    <span class="input-group-text border-0">₹</span>
                    <input type="text" class="form-control" value="<?php echo $product['price2']; ?>" name="price2">
                    <span class="input-group-text border-0">.00</span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update Product</button>
    </div>
    </form>
</div>