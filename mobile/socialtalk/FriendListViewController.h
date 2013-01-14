//
//  FriendListViewController.h
//  socialtalk
//
//  Created by wei yan on 1/10/13.
//  Copyright (c) 2013 socialtalk. All rights reserved.
//

#import <UIKit/UIKit.h>


@interface FriendListViewController : UITableViewController
@property (nonatomic, retain) NSArray *friendsList;
- (void) loadFriends;
@end
