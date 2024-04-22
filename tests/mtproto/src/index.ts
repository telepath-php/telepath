import Koa from "koa";
import {router} from './routes';
import {TelegramClient} from "telegram";
import {StringSession} from "telegram/sessions";
import 'dotenv/config';

const app = new Koa()

const session = new StringSession(process.env.TELEGRAM_SESSION);
const client = new TelegramClient(session, parseInt(process.env.TELEGRAM_APP_ID!), process.env.TELEGRAM_APP_HASH!, {});

app.context.telegram = client;
app.context.peer = process.env.TELEGRAM_BOT ?? '@TelepathTestBot';

app.use(router.routes()).use(router.allowedMethods());

app.on('exit', async () => {
    console.log('Koa is shutting down...');
    await client.disconnect();

    server.close(() => {
        process.exit(0);
    });
});

const server = app.listen(3000, async () => {
    console.log("Koa ready.");
    await client.connect();
    console.log("Telegram ready.");
});