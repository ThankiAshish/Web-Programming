<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Tutorial 13.3 - (22SOECE13039)</title>
</head>

<body style="height: 100vh">
    <div class="container-fluid d-flex align-items-center justify-content-center p-5" style="height: 100%">
        <div class="card shadow d-flex flex-column align-items-center justify-content-center" style="width: 40%; height: 40%; padding: 10px">
            <?php
            class BankAccount
            {
                private $balance;
                private $interestRate;

                public function setBalance($amount)
                {
                    $this->balance = $amount;
                }

                public function setInterestRate($amount)
                {
                    $this->interestRate = $amount;
                }

                public function deposit($amount)
                {
                    $this->balance += $amount;
                }

                public function withdraw($amount)
                {
                    $this->balance -= $amount;
                }

                public function addInterest()
                {
                    $interest = $this->balance * $this->interestRate;
                    $this->balance += $interest;
                }

                public function getBalance()
                {
                    return $this->balance;
                }
            }

            $account = new BankAccount();

            $account->setBalance(1000);
            $account->setInterestRate(0.05);

            $account->deposit(500);
            $account->withdraw(200);
            $account->addInterest();

            echo "<h2>Current balance: ₹" . $account->getBalance() . "</h2>";
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>