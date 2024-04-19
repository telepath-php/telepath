import {StringSession} from "telegram/sessions";
import {TelegramClient} from "telegram";
import {input} from "@inquirer/prompts";

import 'dotenv/config';

const session = new StringSession(process.env.TELEGRAM_SESSION);
const client = new TelegramClient(session, parseInt(process.env.TELEGRAM_APP_ID!), process.env.TELEGRAM_APP_HASH!, {});

client.start({
    phoneNumber: async () => await input({message: "Please enter your number: "}),
    password: async () => await input({message: "Please enter your password: "}),
    phoneCode: async () =>
        await input({message: "Please enter the code you received: "}),
    onError: (err) => console.log(err),
}).then(async () => {
    console.log(client.session.save());

    await client.disconnect();
});
