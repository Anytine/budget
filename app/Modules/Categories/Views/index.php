<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Accounts</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($entries as $index => $entry) {
                                $output   = [];
                                $output[] = table_td($index + 1);
                                $output[] = table_td(anchor("/account/{$entry['account_id']}", $entry['account_name'], ['target' => '_blank']));
                                $output[] = table_td($entry['category_name']);
                                $output[] = table_td($entry['description']);
                                $output[] = table_td($entry['created_at']);
                                $output[] = table_td($entry['updated_at']);
                                echo table_tr($output);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>