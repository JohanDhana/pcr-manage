<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <table border="0" style="text-align: center; width:100%">
        <thead></thead>
        <tr>
            <td>
                <img alt="popo" src="https://via.placeholder.com/150" />
            </td>
            <td>
                <img alt="popo" style="width: 150px;height: 150px;" src="<?= base_url($test['qr_image']) ?>" />
            </td>
            <td>
                <img alt="popo" src="https://via.placeholder.com/150" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <h1>Test report:</h1>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <h1><?= $test['name'] ?> <?= $test['surname'] ?></h1>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <h2>Please find your test results below:</h2>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr style="background-color: #f2f8fb;color: #003865;font-weight: bold;text-align: center; ">
            <td colspan="3" style="text-align: center;">
                <table border="0" cellspacing="2" style="text-align:left;">
                    <thead></thead>
                    <tr>
                        <td>
                            <table border="0">
                                <thead></thead>
                                <tr>
                                    <td>Booking Reference:</td>
                                    <td></td>
                                    <td><?= $test['testId'] ?></td>
                                </tr>
                                <tr>
                                    <td>Test ID:</td>
                                    <td></td>
                                    <td> <?= $test['test_unique_nr'] ?></td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td></td>
                                    <td> <?= $test['birthday'] ?></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td></td>
                                    <td><?= $test['country'] ?></td>
                                </tr>
                                <tr>
                                    <td>Passport Number:</td>
                                    <td> </td>
                                    <td> <?= $test['personal_nr'] ?></td>
                                </tr>
                                <tr>
                                    <td>Sample Taken: </td>
                                    <td></td>
                                    <td> <?= $test['test_date'] ?></td>
                                </tr>
                                <tr>
                                    <td>Test Type:</td>
                                    <td></td>
                                    <td>Covid-19 (SARS CoV-2) Antigen</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Result:</h3>
                                    </td>
                                    <td></td>
                                    <td>
                                        <h3> <?= $test['test_results'] ? 'Positive' : 'Negative' ?></h3>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>Signature of certifying medical doctor:</td>
            <td> <img alt="popo" src="https://via.placeholder.com/100" /> </td>
            <td> <img alt="popo" src="https://via.placeholder.com/100" /> </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right; width: 70%;">
                Dr Simon Worrell, Global Medical Director, Collinson Group
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" style="background-color: #003865; color: white">
                ©2020 DNAFIT Life Sciences Limited. Registered in England and Wales
                under registration number 08834823<br />
                Registered office address TMS House, Cray Avenue, Orpington, Kent BR5
            </td>
        </tr>
    </table>
</body>

</html>