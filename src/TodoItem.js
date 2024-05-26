import React from 'react';

const TodoItem = ({ todo }) => {
  return (
    <li>
      <input type="checkbox" checked={todo.completed} onChange={() => {}} />
      {todo.text}
    </li>
  );
};

export default TodoItem;
