import Router from "@koa/router";
import {Api} from "telegram";

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

router.get('/sendMessage', async (ctx, next) => {
    await ctx.telegram.invoke(
        new Api.messages.SendMessage({
            peer: '@TiiDevBot',
            message: 'Hello, world!'
        })
    );

    ctx.status = 200;
});