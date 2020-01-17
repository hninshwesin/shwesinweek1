<template>
  <div class="col">
    <div>
      <slot></slot>
    </div>
    <div>{{price}} USD x {{qty}} = {{ actualPrice }} USD</div>
  </div>
</template>
<script>
export default {
  props: ["price", "qty"],
    computed: {
      actualPrice() {
          return this.price * this.qty
      }
    }
};
</script>
P
