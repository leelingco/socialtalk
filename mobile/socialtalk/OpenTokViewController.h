//
//  OpenTokViewController.h
//  socialtalk
//
//  Created by wei yan on 1/12/13.
//  Copyright (c) 2013 socialtalk. All rights reserved.
//

#import <UIKit/UIKit.h>
#import <Opentok/Opentok.h>

@interface OpenTokViewController : UIViewController
- (void)doConnect;
- (void)doPublish;
- (void)showAlert:(NSString*)string;
@end
