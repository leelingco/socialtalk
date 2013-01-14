//
//  FriendListViewController.m
//  socialtalk
//
//  Created by wei yan on 1/10/13.
//  Copyright (c) 2013 socialtalk. All rights reserved.
//

#import "FriendListViewController.h"
#import "OpenTokViewController.h"

@interface FriendListViewController ()


@end

@implementation FriendListViewController
@synthesize friendsList;

- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil
{
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView {
    // There is only one section.
    return 1;
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section {
    // Return the number of time zone names.
    return [self.friendsList count];
}

- (NSIndexPath *)tableView:(UITableView *)tableView willSelectRowAtIndexPath:(NSIndexPath *)indexPath {
    return nil;
}



- (void)viewDidLoad
{

    [super viewDidLoad];
    NSLog(@"view did load");
    self.friendsList=[NSArray arrayWithObjects:@"yanweist", @"linli_t", nil];
    
    UINavigationController * navigationController = [[UINavigationController alloc]initWithRootViewController:self];
    [navigationController setViewControllers:[NSArray arrayWithObject:self] animated:NO];
    NSLog(@"programatically navigation controller: %@",self.navigationController);
    // temporarily just used one tab
    
    //tabBarController should be already connected through NIB
    
    //[tabBarController setViewControllers:[NSArray arrayWithObjects:firstNavigationController,nil]];
    
   // self.window.rootViewController = tabBarController;
    
}

-(void) tableView:(UITableView *)tableView didHighlightRowAtIndexPath:(NSIndexPath *)indexPath{
   
    UITableViewCell *selectedCell = [tableView cellForRowAtIndexPath:indexPath];
    NSString *cellText = selectedCell.textLabel.text;
    NSLog(@"poping up views");
    NSLog(@"self navigation %@",self.navigationController);
    OpenTokViewController *openTokViewController=[[OpenTokViewController alloc] init];
    [self.navigationController presentViewController:openTokViewController  animated:YES completion: nil];
    
    
}

- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath {
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"MyIdentifier"];
    if (cell == nil) {
        cell = [[UITableViewCell alloc] initWithStyle:UITableViewCellStyleSubtitle reuseIdentifier:@"MyIdentifier"];
        cell.selectionStyle = UITableViewCellSelectionStyleBlue;
        
    }
    NSString *item = [self.friendsList objectAtIndex:indexPath.row];
//    cell.textLabel.text = [item valueForKey:@"screen_name"] ;
    cell.textLabel.text = item;
    return cell;
}

-(void) loadFriends{
    NSLog(@"view loaded");
    //self.friendsList=[NSArray arrayWithObjects:@"a", @"b", @"c", nil];
    //[self.tableView reloadData];
    
}
- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
