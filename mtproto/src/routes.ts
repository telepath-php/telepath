import Router from "@koa/router";
import {Api} from "telegram";
import sendMessage from "./api/sendMessage";

export const router = new Router();

router.get('/', async (ctx, next) => {
    ctx.body = 'Hello World!';
    await next();
});

router.get('/exit', async (ctx, next) => {
    ctx.body = 'Exiting...';
    await next();

    ctx.app.emit('exit');
});

router.get('/sendMessage', sendMessage);