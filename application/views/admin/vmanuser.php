</script>
<div class="whitebox">
    <div class="container">
        <h4>Daftar Status User <?php echo $this->User_m->getLastID()->id_user; ?></h4>
        <button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Data User</button></div>
        <div class="bts-ats"></div>
        <table class="table table-bordered table-hover example2">
            <thead>
                <tr class="col-menu-adm">
                    <th>No</th>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>id</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th style="text-align:center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1?>
                <?php foreach ($userdata as $data): ?>
                    <tr>
                        <th><?php echo $no ?></th>
                        <td><img class="listpbox" id="preview" src="<?php echo base_url('assets/img/userimage') ?>/<?php echo $data->foto_profile ?>" alt="preview gambar"></td>
                        <td><?php echo $data->username ?></td>
                        <td><?php echo $data->sid ?></td>
                        <td><?php echo $data->gender ?></td>
                        <td><?php echo $data->status ?></td>
                        <td style="text-align:center"><a href="<?php echo base_url('admin/Cmanuser/detail_user') ?>/<?php echo $data->id_user ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>
                            Detail</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/Cmanuser/proses_delete_user') ?>/<?php echo $data->id_user ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Delete</td>
                            </tr>
                            <?php $no++?>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot></tfoot>
                </table>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Tambah User</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url('admin/Cmanuser/proses_add_user') ?>" method="post">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="username" class="form-control" placeholder="username baru">
                                        </div>
                                        <div class="sambungfloat"></div>
                                    </div>
                                    <div class="form-group bts-ats">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="gender">
                                                <option> </option>
                                                <option value"male">L</option>
                                                <option value"female">P</option>
                                            </select>
                                        </div>
                                        <div class="sambungfloat"></div>
                                    </div>
                                    <div class="form-group bts-ats">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="status" name="status" placeholder="Status">
                                                <option> </option>
                                                <option value="guru">Guru</option>
                                                <option value="guru">Karyawan</option>
                                            </select>
                                        </div>
                                        <div class="sambungfloat"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
