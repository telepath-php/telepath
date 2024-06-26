import Router from "@koa/router";
import sendMessage from "./api/sendMessage";
import editMessage from "./api/editMessage";
import sendPhoto from "./api/sendPhoto";

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
router.get('/editMessage', editMessage);
router.get('/sendPhoto', sendPhoto);