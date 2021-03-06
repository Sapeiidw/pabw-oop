<div class="card">
    <div class="card-header">
        assignment
        <a href="<?= BASEPATH."assignment/create"?>" class="btn btn-primary btn-sm d-inline">Create</a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>deskripsi</th>
                <th>deadline</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                    if (empty($data)) {
                        echo '<div class="d-flex flex-column justify-content-center align-items-center display-1" style="min-height:100%;height:100vh;width:100%">Empty</div>'; 
                    }else {
                        foreach ($data as $assignment) { 
                            echo '
                            <tr>
                            <td>'.$assignment["id"].'</td>
                            <td><a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'">'.$assignment["name"].'</a></td>
                            <td>'.$assignment["deskripsi"].'</td>
                            <td>'.$assignment["deadline"].'</td>
                            <td>' ;
                            if ($_SESSION['id'] == $assignment['id_user']) {
                                echo '<a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'/submission" class="btn btn-sm btn-primary mr-2">view</a>' ;
                            }else {
                                echo '<a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'/create" class="btn btn-sm btn-primary mr-2">add submission</a>'  ;
                            }
                        echo    '<a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'/edit" class="btn btn-sm mr-1 btn-primary">edit</a>
                                <a href="'.BASEPATH."course/".$assignment['id_course']."/assignment/".$assignment['id'].'/delete" class="btn btn-sm mr-1 btn-danger">delete</a>
                            </td>
                            </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
