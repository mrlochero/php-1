 						CÁC LỆNH GIT
git config --global user.name "loc"
git config --global user.email "loc@gmail.com"

git init      : được sử dưng để tạo, khởi tạo một kho chứa Git mới (Git Repo) ở local

git status :  sử dụng để hiển thị trạng thái của khu vực lưu trữ và dàn dựng
			Hầu hết, nó được sử dụng để hiển thị trạng thái của Git Add và Git commit

git add  :  thêm vào staging Area.

git commit -m "tên commit"    : thêm/ thay đổi file hay thư mục vào repository.

git log : xem lại thông tin lịch sự commit.

git checkout : được dùng để chuyển nhánh hoặc để phục hồi file trong thư mục làm việc từ một commit trước đây 

git merge : dùng để hợp nhất các chi nhánh độc lập thành một nhánh duy nhất trong Git

git push : để đẩy các commit mới ở máy trạm (local repository) --> lên server (remote repository)

git pull :  dùng để tải xuống dữ liệu từ một Remote repository 
		và cập nhật Local repository phù hợp với dữ liệu đó.

						Khái niệm:

- Staging Area nghĩa là khu vực sẽ lưu trữ những thay đổi của bạn trên tập tin để nó có thể được commit.


-commit : là action để Git lưu lại một bản chụp (snapshot) của các sự thay đổi trong thư mục làm việc,
			 và các tập tin và thư mục được thay đổi đã phải nằm trong Staging Area


				file hiện tại ---> Staging Area --->  commit
	

						BRANCH :
-  phân nhánh mới để làm việc.
các lệnh :
 git checkout -b "n" : tạo nhánh n
 git checkout n : chuyển nhánh n



						Gitignore :
- là các file có đuôi .gitignore được trang bị cơ chế bỏ qua.  những file đứa vào gitignore sẽ đc bỏ qua.