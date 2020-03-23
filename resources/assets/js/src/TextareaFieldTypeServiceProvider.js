import TextareaFieldType from '../components/Textarea.vue'
import {ServiceProvider} from '@anomaly/streams-platform'

export class TextareaFieldTypeServiceProvider extends ServiceProvider {
    boot(){
        Vue.component('textarea-field-type', TextareaFieldType);
    }
}
