<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9dc4ab1c639887871af2fe9b769dd0e1233e18070e265322add2a00a1f9984c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bf0caba2f807c67d6383318b3ccab70dbd30bbbc49d500ccbab339169eb0692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf0caba2f807c67d6383318b3ccab70dbd30bbbc49d500ccbab339169eb0692->enter($__internal_7bf0caba2f807c67d6383318b3ccab70dbd30bbbc49d500ccbab339169eb0692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_08b5ba9429cdfdaf26b6f1eeec9638bce8c12ec3bf64e1c92aa9482d505456c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b5ba9429cdfdaf26b6f1eeec9638bce8c12ec3bf64e1c92aa9482d505456c0->enter($__internal_08b5ba9429cdfdaf26b6f1eeec9638bce8c12ec3bf64e1c92aa9482d505456c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7bf0caba2f807c67d6383318b3ccab70dbd30bbbc49d500ccbab339169eb0692->leave($__internal_7bf0caba2f807c67d6383318b3ccab70dbd30bbbc49d500ccbab339169eb0692_prof);

        
        $__internal_08b5ba9429cdfdaf26b6f1eeec9638bce8c12ec3bf64e1c92aa9482d505456c0->leave($__internal_08b5ba9429cdfdaf26b6f1eeec9638bce8c12ec3bf64e1c92aa9482d505456c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
