<?php
include "inc/header.php"
?>


<div class="container">
    <h2>View All Transactions</h2>
    <table class="table">
        <thead>
            <tr><th>ID</th>
                <th>User</th>
                <th>Account</th>
                <th>Return</th>
                <th>Memo</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all transactions
            $sql = "SELECT * FROM transactions";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['txn_user'] . "</td>";
                    echo "<td>" . $row['txn_acct'] . "</td>";
                    echo "<td>" . $row['txn_rtn'] . "</td>";
                    echo "<td>" . $row['txn_memo'] . "</td>";
                    echo "<td>" . $row['txn_amount'] . "</td>";
                    echo "<td>" . ($row['txn_status'] == 1 ? 'Pending' : 'Approved') . "</td>";
                    echo "<td>";
                    if ($row['txn_status'] == 1) {
                        echo "<button class='btn btn-primary approve-btn' data-txn-rtn='" . $row['txn_rtn'] . "'>Approve</button>";
                    } else {
                        echo "<button class='btn btn-primary' disabled>Approved</button>";
                    }
                    echo "</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
    $('.approve-btn').click(function(event) {
        event.preventDefault(); // Prevent default button behavior

        var txnRtn = $(this).data('txn-rtn');
        var button = $(this);

        $.ajax({
            type: 'POST',
            url: 'process_transaction.php',
            data: { txn_rtn: txnRtn }, // Check if txn_rtn is being passed correctly
            success: function(response) {
                alert(response);
                // Disable the button after approval
                button.prop('disabled', true).text('Approved');
                // Reload the page
                location.reload();
            }
        });
    });
});


</script>






<?php
include "inc/footer.php";
?>