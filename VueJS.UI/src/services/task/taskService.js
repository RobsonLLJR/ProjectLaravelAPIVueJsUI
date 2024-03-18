import * as taskResource from './taskResource';

export const getTask = () => {
    return taskResource.getTask().then(({
        data
    })=> data);
}

export const postTask = (object) => {
    return taskResource.postTask(object).then(({
        data
    }) => data);
}