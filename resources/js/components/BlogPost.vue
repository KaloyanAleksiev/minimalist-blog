<template>
    <div>
        <div type="button" class="list-group-item d-flex justify-content-between align-items-start" @click="showPost">
            <div class="me-auto">
                <div class="fw-bold">{{ title }}</div>
            </div>
            <span class="badge bg-primary rounded-pill">{{ comments }}</span>
        </div>
        <div class="modal fade out" id="postModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center"></div>
                    <div class="modal-footer d-block"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        postId: Number,
        title: String,
        comments: Number
    },
    methods: {
        showPost() {
            let postModalElement = document.getElementById('postModal');
            let postModal = new bootstrap.Modal(postModalElement, {});
            axios.get('/' + this.postId).then(
                (responce) => {
                    let comments = '<div><b>Comments:</b></div>';
                    responce.data.comments.forEach(element => {
                        comments += '<div>' + element.comment + '</div>';
                    });

                    postModalElement.querySelector('.modal-title').innerHTML = responce.data.title;
                    postModalElement.querySelector('.modal-body').innerHTML = responce.data.body;
                    postModalElement.querySelector('.modal-footer').innerHTML = comments;

                    postModal.show();
                }, (error) => {
                    postModalElement.querySelector('.modal-title').innerHTML = error.response.statusText;
                    postModalElement.querySelector('.modal-body').innerHTML = error.response.data.message;
                    postModal.show();
                });
        }
    }
}
</script>
