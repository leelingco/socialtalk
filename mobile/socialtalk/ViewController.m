//
//  ViewController.m
//  socialtalk
//
//  Created by wei yan on 1/6/13.
//  Copyright (c) 2013 socialtalk. All rights reserved.
//

#import "ViewController.h"
#import "FriendListViewController.h"
#import <Accounts/Accounts.h>
#import <Social/Social.h>

@interface ViewController ()

@end

@implementation ViewController

- (void)viewDidLoad
{
    [super viewDidLoad];
	// Do any additional setup after loading the view, typically from a nib.
    
    
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


-(IBAction)diplayTwitterFriend:(id)sender
{
    ACAccountStore *accountStore = [[ACAccountStore alloc] init];
    
    // Create an account type that ensures Twitter accounts are retrieved.
    ACAccountType *accountType = [accountStore accountTypeWithAccountTypeIdentifier:ACAccountTypeIdentifierTwitter];
    __block NSString *username;
    __block ACAccount *twitterAccount;
    
   
    FriendListViewController *friendListViewController=[[FriendListViewController alloc] init];
[self.navigationController presentViewController:friendListViewController animated:YES completion: nil];

    
    
    [accountStore requestAccessToAccountsWithType:accountType options:nil completion:^(BOOL granted, NSError *error) {
        
        if(granted) {
            NSArray *accountsArray = [accountStore accountsWithAccountType:accountType];
            for (ACAccount *account in accountsArray ) {
                username=account.username;
                twitterAccount=account;
            }

        
        NSMutableDictionary *params = [[NSMutableDictionary alloc] init];
        [params setObject:username forKey:@"screen_name"];
      
        NSURL *url = [NSURL URLWithString:@"https://api.twitter.com/1.1/friends/list.json"];
            
        SLRequest *request = [SLRequest requestForServiceType:SLServiceTypeTwitter requestMethod:SLRequestMethodGET URL:url parameters:params];
            request.account=twitterAccount;

            [request performRequestWithHandler:
             ^(NSData *responseData, NSHTTPURLResponse *urlResponse, NSError *error) {
                 
                 if (responseData) {
                     //  Use the NSJSONSerialization class to parse the returned JSON
                     NSError *jsonError;
                     NSArray *timeline =[NSJSONSerialization JSONObjectWithData:responseData
                                                     options:NSJSONReadingMutableLeaves
                                                       error:&jsonError];
                if (timeline) {
                    friendListViewController.friendsList=[timeline valueForKey:@"users"];
                }
                 
                 else {
                     // Inspect the contents of ;;
                     NSLog(@"%@", jsonError);
                 }
                 }
             }];
               
                
        }
    }];
  
}

-(IBAction)switchToNewView:(id)sender
{
    FriendListViewController *friendListViewController=[[FriendListViewController alloc]init];
    //UITableViewController *friendListViewController=[[UITableViewController alloc] init];
    [self.navigationController presentViewController:friendListViewController animated:YES completion: nil];
}

- (void) prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    
    NSString *identifier = segue.identifier;
    
    if([identifier isEqualToString:@"toFriendListView"]){
            
        
    } 
   }
@end
