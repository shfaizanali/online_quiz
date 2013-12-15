<div class="container">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-11 col-md-offset-0" style="width: 97%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h3 class="panel-title">Edit question</h3>
                </div>
                <div class="panel-body">
                   <form role="form" action="<?=base_url().'quiz/do_edit_question?qid='?><?=$question_details['question']->id?>" enctype="multipart/form-data" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Level</label>
                        <select name="level" class="form-control">
                            <?foreach ($levels as $level)    
                            {
                                if($question_details['question']->level == $level->id)
                                {
                            ?>
                                    <option value="<?=$level->id?>" selected="selected"><?=$level->level_name?> </option>
                            <?
                                }
                                else
                                {
                            ?>
                                    <option value="<?=$level->id?>"><?=$level->level_name?></option>
                            <?
                                }
                            }?>
                        </select>
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Questions</label>
                        <input type="text" name="question" class="form-control" placeholder="Question" value="<?=$question_details['question']->question?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="sample_file" class="form-control" id="exampleInputPassword1"/>
                      </div> 
                       
                      <div class="form-group">
                        <label for="option1">Option 1</label>
                        <input type="text" name="option1" class="form-control" placeholder="Option 1" value="<?=$question_details['options'][0]->option?>" required>
                      </div>
                       <div class="form-group">
                        <label for="option2">Option 2</label>
                        <input type="text" name="option2" class="form-control" placeholder="Option 2" value="<?=$question_details['options'][1]->option?>" required>
                      </div>
                       <div class="form-group">
                        <label for="option3">Option 3</label>
                        <input type="text" name="option3" class="form-control" placeholder="Option 3" value="<?=$question_details['options'][2]->option?>" required>
                      </div>
                       <div class="form-group">
                        <label for="option4">Option 4</label>
                        <input type="text" name="option4" class="form-control" placeholder="Option 4" value="<?=$question_details['options'][3]->option?>" required>
                      </div>
                       <hr/>
                       <div class="form-group">
                       <label for="Answer">Correct Answer</label><br/>
                       
                        <label class="radio-inline">
                            <? if($question_details['options'][0]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option1" name="answer" checked="checked"> Option 1
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option1" name="answer"> Option 1
                            <?
                            }
                            ?>
                        </label>
                        <label class="radio-inline">
                            <? if($question_details['options'][1]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option2" name="answer" checked="checked"> Option 2
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option2" name="answer"> Option 2
                            <?
                            }
                            ?>
                        </label>
                        <label class="radio-inline">
                            <? if($question_details['options'][2]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option3" name="answer" checked="checked"> Option 3
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option3" name="answer"> Option 3
                            <?
                            }
                            ?>
                        </label>
                        <label class="radio-inline">
                            <? if($question_details['options'][3]->is_correct)
                               {
                            ?>
                                <input type="radio"  value="option4" name="answer" checked="checked"> Option 4
                            <?
                               }
                            else
                            {
                            ?>
                                <input type="radio"  value="option4" name="answer"> Option 4
                            <?
                            }
                            ?>
                        </label>
                       </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>