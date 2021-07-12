import React from 'react';
import { ComponentMeta } from '@storybook/react';
import { ${NAME}, ${NAME}Props } from "./${NAME}";

export default {
  title: 'Category/${NAME}',
  component: ${NAME},
  args: {}
} as ComponentMeta<typeof ${NAME}>;

export const Default = (args:${NAME}Props) => <${NAME} {...args} />


