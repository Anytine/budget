<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title"></h3>
                    <button type="button" class="btn btn-primary ms-auto" onclick="openModal()">Add New</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Accounts</th>
                                <th>Total Budgets</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($entries as $index => $entry) {
                                $output   = [];
                                $output[] = table_td($index + 1);
                                $output[] = table_td($entry['name']);
                                $output[] = table_td($entry['total_budget']);
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