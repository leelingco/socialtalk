//
//  JHCustomSegue.m
//  socialtalk
//
//  Created by wei yan on 1/10/13.
//  Copyright (c) 2013 socialtalk. All rights reserved.
//

#import "JHCustomSegue.h"
#import "OpenTokViewController.h"

@implementation JHCustomSegue

- (void) perform {
    NSLog(@"inside perform");
    UIViewController *src = (UIViewController *) self.sourceViewController;

    OpenTokViewController *openTokViewController = (OpenTokViewController *) self.destinationViewController;
   

    [UIView transitionWithView:src.navigationController.view duration:0.2
                       options:UIViewAnimationOptionTransitionFlipFromLeft
                    animations:^{
                        [src.navigationController pushViewController:openTokViewController animated:NO];
                    }
                    completion:nil];
    
}



@end
