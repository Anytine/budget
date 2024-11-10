<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Categories</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>PAID</th>
                                <th>Paid Date</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($entries as $index => $entry) {
                                $output   = [];
                                $output[] = table_td($index + 1);
                                $output[] = table_td(anchor("/category/{$entry['category_id']}", "#{$entry['category_id']} - {$entry['category_name']}", ['target' => '_blank']));
                                $output[] = table_td($entry['expenses_name']);
                                $output[] = table_td($entry['description']);
                                $output[] = table_td($entry['is_paid']);
                                $output[] = table_td($entry['paid_date']);
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