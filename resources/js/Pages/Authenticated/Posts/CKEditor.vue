<template>
    <div>
      <div ref="editor"></div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      modelValue: {
        type: String,
        default: '',
      },
      config: {
        type: Object,
        default: () => ({}),
      },
    },
    emits: ['update:modelValue'],
    data() {
      return {
        editor: null,
      };
    },
    mounted() {
      this.initializeEditor();
    },
    beforeUnmount() {
      this.destroyEditor();
    },
    methods: {
      async initializeEditor() {
        // Access ClassicEditor from the global CKEditor5 object
        const { ClassicEditor } = window.CKEditor5;
  
        // Initialize the editor
        this.editor = await ClassicEditor.create(this.$refs.editor, {
          ...this.config,
        });
  
        // Set initial data
        this.editor.setData(this.modelValue);
  
        // Listen for changes
        this.editor.model.document.on('change:data', () => {
          this.$emit('update:modelValue', this.editor.getData());
        });
      },
      destroyEditor() {
        if (this.editor) {
          this.editor.destroy().then(() => {
            this.editor = null;
          });
        }
      },
    },
    watch: {
      modelValue(newValue) {
        if (this.editor && newValue !== this.editor.getData()) {
          this.editor.setData(newValue);
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add custom styles if needed */
  .ck-editor__editable {
    min-height: 200px;
  }
  </style>