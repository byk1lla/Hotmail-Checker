const imaps = require('imap-simple');
const express = require('express');
const bodyParser = require('body-parser');

const app = express();
app.use(bodyParser.json());

app.post('/verify', async (req, res) => {
    const { email, password } = req.body;

    const config = {
        imap: {
            user: email,
            password: password,
            host: 'imap-mail.outlook.com',
            port: 993,
            tls: true,
            authTimeout: 3000
        }
    };

    try {
        const connection = await imaps.connect(config);
        await connection.end();
        res.json({ success: true, message: 'Doğrulama başarılı!' });
    } catch (error) {
        res.json({ success: false, message: 'Doğrulama başarısız!', error: error.message });
    }
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
