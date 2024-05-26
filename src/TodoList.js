import React from 'react';
import TodoItem from './TodoItem';

const TodoList = ({ todos, addTodo }) => {
  return (
    <div>
      <input type="text" placeholder="Add a new todo" onChange={(e) => addTodo(e.target.value)} />
      <ul>
        {todos.map((todo) => (
          <TodoItem key={todo.text} todo={todo} />
        ))}
      </ul>
    </div>
  );
};

export default TodoList;
