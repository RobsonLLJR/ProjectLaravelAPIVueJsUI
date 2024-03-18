import * as taskResource from './taskResource';

export const getTask = () => {
    return taskResource.getTask().then(({
        data
    })=> data);
}