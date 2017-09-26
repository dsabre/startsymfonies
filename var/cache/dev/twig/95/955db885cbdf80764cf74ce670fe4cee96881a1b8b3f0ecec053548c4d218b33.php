<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1eec25b079a05787991f241f9ec132524debb47d43bae92c9371ea37a41cd434 extends Twig_Template
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
        $__internal_d2afeb7cc83bfec42c26319f1a13e3998d2bcce7db9a6f395aea6be5e745f113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2afeb7cc83bfec42c26319f1a13e3998d2bcce7db9a6f395aea6be5e745f113->enter($__internal_d2afeb7cc83bfec42c26319f1a13e3998d2bcce7db9a6f395aea6be5e745f113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_32a1256943da3535aeceb6dff332643dc78e86f8eeabdb39600e4e9f31aa54bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a1256943da3535aeceb6dff332643dc78e86f8eeabdb39600e4e9f31aa54bb->enter($__internal_32a1256943da3535aeceb6dff332643dc78e86f8eeabdb39600e4e9f31aa54bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d2afeb7cc83bfec42c26319f1a13e3998d2bcce7db9a6f395aea6be5e745f113->leave($__internal_d2afeb7cc83bfec42c26319f1a13e3998d2bcce7db9a6f395aea6be5e745f113_prof);

        
        $__internal_32a1256943da3535aeceb6dff332643dc78e86f8eeabdb39600e4e9f31aa54bb->leave($__internal_32a1256943da3535aeceb6dff332643dc78e86f8eeabdb39600e4e9f31aa54bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
