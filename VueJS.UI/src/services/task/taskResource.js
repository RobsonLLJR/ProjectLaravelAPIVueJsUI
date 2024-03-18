import api from '../../utils/api';

export const getTask = () => {
    return api.get("/task");
};

export const postTask = (object) => {
    return api.post("/task", object);
}