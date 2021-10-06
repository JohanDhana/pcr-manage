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
        <tbody>
            <tr>
                <td>
                    <img alt="popo" src="<?= base_url('assets/images/logo.png') ?>" />
                </td>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <h1>Rapid Test Covid 19</h1>
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
                    <table border="0" cellspacing="2">
                        <thead></thead>
                        <tr>
                            <td>
                                <table border="0" style="text-align: left;">
                                    <thead></thead>
                                    <tr>
                                        <td>Booking Reference:</td>
                                        <td></td>
                                        <td><?= trim($test['testId']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Test ID:</td>
                                        <td></td>
                                        <td><?= trim($test['test_unique_nr']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Birthday</td>
                                        <td></td>
                                        <td><?= trim($test['birthday']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td></td>
                                        <td><?= trim($test['country']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Passport Number:</td>
                                        <td> </td>
                                        <td><?= trim($test['personal_nr']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Sample Taken: </td>
                                        <td></td>
                                        <td><?= trim($test['test_date']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Test Type:</td>
                                        <td></td>
                                        <td>Rapid Test Covid 19</td>
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
                <td></td>
            </tr>
            <tr>
                <td><img alt="popo" style="width: 100px;height: 100px;" src="<?= base_url($test['qr_image']) ?>" /></td>
                <td></td>
                <td> <img alt="popo" style="width: 100px;height: 100px;" src="<?= base_url('assets/images/miolaborator.png') ?>" /> </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: right; width: 70%;">
                    Dr, Majlinda Germenji , Mio Laborator
                </td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </tbody>
        <tr>
            <td colspan="2">
                ©2021 DNAFIT Life Sciences Limited. Registered in Albania
                under registration number G85522075I <br />
                Registered office address R Partizani ,L 13 korce.
            </td>
        </tr>
    </table>
</body>

</html>