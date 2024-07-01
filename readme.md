## How to test an interface

It is difficult to test an interface directly because it contains signatures and not behaviors.

We could create as many test classes as there are implementations of an interface, but this would be time-consuming and potentially bug-inducing.

An effective solution is to separate the business logic of an interface from the implementation details.

![image](https://github.com/DeGraciaMathieu/interface-testing/assets/11473997/8b4fd508-9047-4dc6-a11c-a16991a5f382)

- `AbstractUserRepository` contains the test methods and various assertions, e.g. : "it_able_to_find_user_by_id"; they do not contain any implementation-specific logic. 
- `UserRepositoryInMemoryTest` and `UserRepositoryInSessionTest` contain only the instantiation logic of the implementations; they do not contain any test logic.

This separation enhances the reliability and relevance of the tests and allows behaviors to be assigned to interfaces.
