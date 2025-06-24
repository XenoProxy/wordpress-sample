import { registerBlockType } from '@wordpress/blocks';
import { RichText } from '@wordpress/block-editor';

registerBlockType('myplugin/hello-world', {
  title: 'Hello World',
  icon: 'smiley',
  category: 'text',
  attributes: {
    content: { type: 'string' },
  },
  edit: ({ attributes, setAttributes }) => {
    return (
      <RichText
        tagName="p"
        value={attributes.content}
        onChange={(content) => setAttributes({ content })}
        placeholder="Type something..."
      />
    );
  },
  save: ({ attributes }) => {
    return <p>{attributes.content}</p>;
  },
});