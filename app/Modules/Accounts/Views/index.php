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
                                <th>Total Budgets</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($entries as $index => $entry) {
                                echo '<tr>';
                                echo table_td($index + 1);
                                echo table_td($entry['year']);
                                echo table_td($entry['total_budget']);
                                echo table_td($entry['created_at']);
                                echo table_td($entry['updated_at']);
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>